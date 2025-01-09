<?php

namespace Sunaoka\Aws\Structures\DataZone\GetFormType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property list<Shapes\Import> $imports
 * @property Shapes\Model $model
 * @property string $name
 * @property string $originDomainId
 * @property string $originProjectId
 * @property string $owningProjectId
 * @property string $revision
 * @property 'ENABLED'|'DISABLED' $status
 */
class GetFormTypeResponse extends Response
{
}
