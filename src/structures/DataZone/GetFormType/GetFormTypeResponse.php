<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property list<Shapes\Import>|null $imports
 * @property Shapes\Model $model
 * @property string $name
 * @property string|null $originDomainId
 * @property string|null $originProjectId
 * @property string|null $owningProjectId
 * @property string $revision
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class GetFormTypeResponse extends Response
{
}
