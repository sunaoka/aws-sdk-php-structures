<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateAdapter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdapterId
 * @property string|null $AdapterName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>|null $FeatureTypes
 * @property 'ENABLED'|'DISABLED'|null $AutoUpdate
 */
class UpdateAdapterResponse extends Response
{
}
