<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $revision
 * @property string $owningProjectId
 * @property string $name
 * @property 'CREATED'|'CREATING'|'CREATE_FAILED' $status
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\DataProductItem>|null $items
 * @property list<Shapes\FormOutput>|null $formsOutput
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 */
class CreateDataProductResponse extends Response
{
}
