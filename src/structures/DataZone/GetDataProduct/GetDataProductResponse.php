<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $firstRevisionCreatedAt
 * @property string $firstRevisionCreatedBy
 * @property list<Shapes\FormOutput> $formsOutput
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property list<Shapes\DataProductItem> $items
 * @property string $name
 * @property string $owningProjectId
 * @property string $revision
 * @property 'CREATED'|'CREATING'|'CREATE_FAILED' $status
 */
class GetDataProductResponse extends Response
{
}
