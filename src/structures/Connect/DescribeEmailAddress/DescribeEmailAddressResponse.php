<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEmailAddress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EmailAddressId
 * @property string|null $EmailAddressArn
 * @property string|null $EmailAddress
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property string|null $CreateTimestamp
 * @property string|null $ModifiedTimestamp
 * @property list<Shapes\AliasConfiguration>|null $AliasConfigurations
 * @property array<string, string>|null $Tags
 */
class DescribeEmailAddressResponse extends Response
{
}
