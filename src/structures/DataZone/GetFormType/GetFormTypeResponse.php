<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $name
 * @property string $revision
 * @property Shapes\Model $model
 * @property string|null $owningProjectId
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property list<Shapes\Import>|null $imports
 */
class GetFormTypeResponse extends Response
{
}
