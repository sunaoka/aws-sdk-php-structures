<?php

namespace Sunaoka\Aws\Structures\NotificationsContacts;

class NotificationsContactsClient extends \Aws\NotificationsContacts\NotificationsContactsClient
{
    use ActivateEmailContact\ActivateEmailContactTrait;
    use CreateEmailContact\CreateEmailContactTrait;
    use DeleteEmailContact\DeleteEmailContactTrait;
    use GetEmailContact\GetEmailContactTrait;
    use ListEmailContacts\ListEmailContactsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SendActivationCode\SendActivationCodeTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
