<?php

namespace Sunaoka\Aws\Structures\Glue\GetAsset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string $AssetTypeId
 * @property list<string>|null $GlossaryTerms
 * @property array<string, Shapes\AssetFormEntry>|null $Forms
 * @property array<string, Shapes\AssetFormEntry>|null $Attachments
 * @property array<string, Shapes\IterableFormEntry>|null $IterableForms
 */
class GetAssetResponse extends Response
{
}
