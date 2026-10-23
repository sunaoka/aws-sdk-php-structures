<?php

namespace Sunaoka\Aws\Structures\Continuum\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property 'GROUP'|'PROJECT' $targetType
 * @property string $targetPath
 * @property 'AUTOMATIC'|'NONE' $tokenRotation
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class GitLabDetails extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     targetType: 'GROUP'|'PROJECT',
     *     targetPath: string,
     *     tokenRotation: 'AUTOMATIC'|'NONE',
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
