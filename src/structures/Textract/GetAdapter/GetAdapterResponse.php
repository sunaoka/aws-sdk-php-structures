<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AdapterId
 * @property string $AdapterName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property 'ENABLED'|'DISABLED' $AutoUpdate
 * @property array<string, string> $Tags
 */
class GetAdapterResponse extends Response
{
}
