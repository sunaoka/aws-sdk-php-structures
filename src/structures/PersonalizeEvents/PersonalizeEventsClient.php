<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents;

class PersonalizeEventsClient extends \Aws\PersonalizeEvents\PersonalizeEventsClient
{
    use PutEvents\PutEventsTrait;
    use PutItems\PutItemsTrait;
    use PutUsers\PutUsersTrait;
}
