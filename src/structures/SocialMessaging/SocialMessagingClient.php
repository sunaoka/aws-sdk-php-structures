<?php

namespace Sunaoka\Aws\Structures\SocialMessaging;

class SocialMessagingClient extends \Aws\SocialMessaging\SocialMessagingClient
{
    use AssociateWhatsAppBusinessAccount\AssociateWhatsAppBusinessAccountTrait;
    use CreateWhatsAppMessageTemplate\CreateWhatsAppMessageTemplateTrait;
    use CreateWhatsAppMessageTemplateFromLibrary\CreateWhatsAppMessageTemplateFromLibraryTrait;
    use CreateWhatsAppMessageTemplateMedia\CreateWhatsAppMessageTemplateMediaTrait;
    use DeleteWhatsAppMessageMedia\DeleteWhatsAppMessageMediaTrait;
    use DeleteWhatsAppMessageTemplate\DeleteWhatsAppMessageTemplateTrait;
    use DisassociateWhatsAppBusinessAccount\DisassociateWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccount\GetLinkedWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccountPhoneNumber\GetLinkedWhatsAppBusinessAccountPhoneNumberTrait;
    use GetWhatsAppMessageMedia\GetWhatsAppMessageMediaTrait;
    use GetWhatsAppMessageTemplate\GetWhatsAppMessageTemplateTrait;
    use ListLinkedWhatsAppBusinessAccounts\ListLinkedWhatsAppBusinessAccountsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWhatsAppMessageTemplates\ListWhatsAppMessageTemplatesTrait;
    use ListWhatsAppTemplateLibrary\ListWhatsAppTemplateLibraryTrait;
    use PostWhatsAppMessageMedia\PostWhatsAppMessageMediaTrait;
    use PutWhatsAppBusinessAccountEventDestinations\PutWhatsAppBusinessAccountEventDestinationsTrait;
    use SendWhatsAppMessage\SendWhatsAppMessageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateWhatsAppMessageTemplate\UpdateWhatsAppMessageTemplateTrait;
}
