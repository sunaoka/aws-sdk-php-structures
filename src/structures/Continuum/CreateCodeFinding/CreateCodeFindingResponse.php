<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeFinding;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $findingId
 * @property string $findingArn
 * @property string $title
 * @property 'SUBMITTED'|'VALIDATING'|'CONFIRMED'|'DISCARDED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateCodeFindingResponse extends Response
{
}
