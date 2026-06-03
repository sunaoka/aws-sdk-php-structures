<?php

namespace Sunaoka\Aws\Structures\SocialMessaging;

class SocialMessagingClient extends \Aws\SocialMessaging\SocialMessagingClient
{
    use AssociateWhatsAppBusinessAccount\AssociateWhatsAppBusinessAccountTrait;
    use CreateWhatsAppFlow\CreateWhatsAppFlowTrait;
    use CreateWhatsAppMessageTemplate\CreateWhatsAppMessageTemplateTrait;
    use CreateWhatsAppMessageTemplateFromLibrary\CreateWhatsAppMessageTemplateFromLibraryTrait;
    use CreateWhatsAppMessageTemplateMedia\CreateWhatsAppMessageTemplateMediaTrait;
    use DeleteWhatsAppFlow\DeleteWhatsAppFlowTrait;
    use DeleteWhatsAppMessageMedia\DeleteWhatsAppMessageMediaTrait;
    use DeleteWhatsAppMessageTemplate\DeleteWhatsAppMessageTemplateTrait;
    use DeprecateWhatsAppFlow\DeprecateWhatsAppFlowTrait;
    use DisassociateWhatsAppBusinessAccount\DisassociateWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccount\GetLinkedWhatsAppBusinessAccountTrait;
    use GetLinkedWhatsAppBusinessAccountPhoneNumber\GetLinkedWhatsAppBusinessAccountPhoneNumberTrait;
    use GetWhatsAppFlow\GetWhatsAppFlowTrait;
    use GetWhatsAppFlowPreview\GetWhatsAppFlowPreviewTrait;
    use GetWhatsAppMessageMedia\GetWhatsAppMessageMediaTrait;
    use GetWhatsAppMessageTemplate\GetWhatsAppMessageTemplateTrait;
    use ListLinkedWhatsAppBusinessAccounts\ListLinkedWhatsAppBusinessAccountsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListWhatsAppFlowAssets\ListWhatsAppFlowAssetsTrait;
    use ListWhatsAppFlows\ListWhatsAppFlowsTrait;
    use ListWhatsAppMessageTemplates\ListWhatsAppMessageTemplatesTrait;
    use ListWhatsAppTemplateLibrary\ListWhatsAppTemplateLibraryTrait;
    use PostWhatsAppMessageMedia\PostWhatsAppMessageMediaTrait;
    use PublishWhatsAppFlow\PublishWhatsAppFlowTrait;
    use PutWhatsAppBusinessAccountEventDestinations\PutWhatsAppBusinessAccountEventDestinationsTrait;
    use SendWhatsAppMessage\SendWhatsAppMessageTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateWhatsAppFlow\UpdateWhatsAppFlowTrait;
    use UpdateWhatsAppFlowAssets\UpdateWhatsAppFlowAssetsTrait;
    use UpdateWhatsAppMessageTemplate\UpdateWhatsAppMessageTemplateTrait;
}
