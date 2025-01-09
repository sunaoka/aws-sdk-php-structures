<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeEntity;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EntityType
 * @property string $EntityIdentifier
 * @property string $EntityArn
 * @property string $LastModifiedDate
 * @property string $Details
 * @property Shapes\JsonDocumentType $DetailsDocument
 */
class DescribeEntityResponse extends Response
{
}
