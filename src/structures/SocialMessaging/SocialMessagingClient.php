<?php

namespace Sunaoka\Aws\Structures\SocialMessaging;

class SocialMessagingClient extends \Aws\SocialMessaging\SocialMessagingClient
{
    use AssociateWhatsAppBusinessAccount\AssociateWhatsAppBusinessAccountTrait;
    use DeleteWhatsAppMessageMedia\DeleteWhatsAppMessageMediaTrait;
    use DisassociateWhatsAppBusinessAccount\DisassociateWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccount\GetLinkedWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccountPhoneNumber\GetLinkedWhatsAppBusinessAccountPhoneNumberTrait;
    use GetWhatsAppMessageMedia\GetWhatsAppMessageMediaTrait;
    use ListLinkedWhatsAppBusinessAccounts\ListLinkedWhatsAppBusinessAccountsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PostWhatsAppMessageMedia\PostWhatsAppMessageMediaTrait;
    use PutWhatsAppBusinessAccountEventDestinations\PutWhatsAppBusinessAccountEventDestinationsTrait;
    use SendWhatsAppMessage\SendWhatsAppMessageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
