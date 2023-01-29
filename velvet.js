Function: ClickEvent(First,Last)
{
    If(First.Value.Length)
    {
      Document.GetElementById(Last).Focus();
    }
  }