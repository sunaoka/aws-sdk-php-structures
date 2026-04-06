<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult|null $firstRevisionCreatedAt
 * @property string|null $firstRevisionCreatedBy
 * @property list<Shapes\FormOutput>|null $formsOutput
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property list<Shapes\DataProductItem>|null $items
 * @property string $name
 * @property string $owningProjectId
 * @property string $revision
 * @property 'CREATED'|'CREATING'|'CREATE_FAILED' $status
 */
class CreateDataProductRevisionResponse extends Response
{
}
