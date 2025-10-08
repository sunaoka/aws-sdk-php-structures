<?php

namespace Sunaoka\Aws\Structures\Notifications;

class NotificationsClient extends \Aws\Notifications\NotificationsClient
{
    use AssociateChannel\AssociateChannelTrait;
    use AssociateManagedNotificationAccountContact\AssociateManagedNotificationAccountContactTrait;
    use AssociateManagedNotificationAdditionalChannel\AssociateManagedNotificationAdditionalChannelTrait;
    use AssociateOrganizationalUnit\AssociateOrganizationalUnitTrait;
    use CreateEventRule\CreateEventRuleTrait;
    use CreateNotificationConfiguration\CreateNotificationConfigurationTrait;
    use DeleteEventRule\DeleteEventRuleTrait;
    use DeleteNotificationConfiguration\DeleteNotificationConfigurationTrait;
    use DeregisterNotificationHub\DeregisterNotificationHubTrait;
    use DisableNotificationsAccessForOrganization\DisableNotificationsAccessForOrganizationTrait;
    use DisassociateChannel\DisassociateChannelTrait;
    use DisassociateManagedNotificationAccountContact\DisassociateManagedNotificationAccountContactTrait;
    use DisassociateManagedNotificationAdditionalChannel\DisassociateManagedNotificationAdditionalChannelTrait;
    use DisassociateOrganizationalUnit\DisassociateOrganizationalUnitTrait;
    use EnableNotificationsAccessForOrganization\EnableNotificationsAccessForOrganizationTrait;
    use GetEventRule\GetEventRuleTrait;
    use GetManagedNotificationChildEvent\GetManagedNotificationChildEventTrait;
    use GetManagedNotificationConfiguration\GetManagedNotificationConfigurationTrait;
    use GetManagedNotificationEvent\GetManagedNotificationEventTrait;
    use GetNotificationConfiguration\GetNotificationConfigurationTrait;
    use GetNotificationEvent\GetNotificationEventTrait;
    use GetNotificationsAccessForOrganization\GetNotificationsAccessForOrganizationTrait;
    use ListChannels\ListChannelsTrait;
    use ListEventRules\ListEventRulesTrait;
    use ListManagedNotificationChannelAssociations\ListManagedNotificationChannelAssociationsTrait;
    use ListManagedNotificationChildEvents\ListManagedNotificationChildEventsTrait;
    use ListManagedNotificationConfigurations\ListManagedNotificationConfigurationsTrait;
    use ListManagedNotificationEvents\ListManagedNotificationEventsTrait;
    use ListMemberAccounts\ListMemberAccountsTrait;
    use ListNotificationConfigurations\ListNotificationConfigurationsTrait;
    use ListNotificationEvents\ListNotificationEventsTrait;
    use ListNotificationHubs\ListNotificationHubsTrait;
    use ListOrganizationalUnits\ListOrganizationalUnitsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterNotificationHub\RegisterNotificationHubTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateEventRule\UpdateEventRuleTrait;
    use UpdateNotificationConfiguration\UpdateNotificationConfigurationTrait;
}
