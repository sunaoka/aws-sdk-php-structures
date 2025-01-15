<?php

namespace Sunaoka\Aws\Structures\Iam\GenerateServiceLastAccessedDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property 'SERVICE_LEVEL'|'ACTION_LEVEL'|null $Granularity
 */
class GenerateServiceLastAccessedDetailsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Granularity?: 'SERVICE_LEVEL'|'ACTION_LEVEL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
