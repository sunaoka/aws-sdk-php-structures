<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $VaultARN
 * @property string|null $VaultName
 * @property string|null $CreationDate
 * @property string|null $LastInventoryDate
 * @property int|null $NumberOfArchives
 * @property int|null $SizeInBytes
 */
class DescribeVaultResponse extends Response
{
}
