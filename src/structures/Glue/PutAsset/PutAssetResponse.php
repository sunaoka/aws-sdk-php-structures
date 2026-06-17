<?php

namespace Sunaoka\Aws\Structures\Glue\PutAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property array<string, Shapes\AssetFormEntry>|null $Forms
 */
class PutAssetResponse extends Response
{
}
