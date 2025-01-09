<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $VaultARN
 * @property string $VaultName
 * @property string $CreationDate
 * @property string $LastInventoryDate
 * @property int $NumberOfArchives
 * @property int $SizeInBytes
 */
class DescribeVaultResponse extends Response
{
}
