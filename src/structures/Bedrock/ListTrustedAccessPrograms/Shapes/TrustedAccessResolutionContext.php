<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListTrustedAccessPrograms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string|null $projectArn
 */
class TrustedAccessResolutionContext extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     projectArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
