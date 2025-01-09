<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $UserId
 * @property string $Name
 * @property string $Email
 * @property string $DisplayName
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER' $UserRole
 * @property \Aws\Api\DateTimeResult $EnabledDate
 * @property \Aws\Api\DateTimeResult $DisabledDate
 * @property \Aws\Api\DateTimeResult $MailboxProvisionedDate
 * @property \Aws\Api\DateTimeResult $MailboxDeprovisionedDate
 * @property string $FirstName
 * @property string $LastName
 * @property bool $HiddenFromGlobalAddressList
 * @property string $Initials
 * @property string $Telephone
 * @property string $Street
 * @property string $JobTitle
 * @property string $City
 * @property string $Company
 * @property string $ZipCode
 * @property string $Department
 * @property string $Country
 * @property string $Office
 * @property string $IdentityProviderUserId
 * @property string $IdentityProviderIdentityStoreId
 */
class DescribeUserResponse extends Response
{
}
