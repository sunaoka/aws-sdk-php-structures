<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $UserId
 * @property string|null $Name
 * @property string|null $Email
 * @property string|null $DisplayName
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property 'USER'|'RESOURCE'|'SYSTEM_USER'|'REMOTE_USER'|null $UserRole
 * @property \Aws\Api\DateTimeResult|null $EnabledDate
 * @property \Aws\Api\DateTimeResult|null $DisabledDate
 * @property \Aws\Api\DateTimeResult|null $MailboxProvisionedDate
 * @property \Aws\Api\DateTimeResult|null $MailboxDeprovisionedDate
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property bool|null $HiddenFromGlobalAddressList
 * @property string|null $Initials
 * @property string|null $Telephone
 * @property string|null $Street
 * @property string|null $JobTitle
 * @property string|null $City
 * @property string|null $Company
 * @property string|null $ZipCode
 * @property string|null $Department
 * @property string|null $Country
 * @property string|null $Office
 * @property string|null $IdentityProviderUserId
 * @property string|null $IdentityProviderIdentityStoreId
 */
class DescribeUserResponse extends Response
{
}
