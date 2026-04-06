<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdapterId
 * @property string|null $AdapterName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null $FeatureTypes
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 * @property array<string, string>|null $Tags
 */
class GetAdapterResponse extends Response
{
}
