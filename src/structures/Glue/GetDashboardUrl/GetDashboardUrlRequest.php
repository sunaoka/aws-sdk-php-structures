<?php

namespace Sunaoka\Aws\Structures\Glue\GetDashboardUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property 'JOB'|'SESSION' $ResourceType
 * @property string|null $RequestOrigin
 */
class GetDashboardUrlRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ResourceType: 'JOB'|'SESSION',
     *     RequestOrigin?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
