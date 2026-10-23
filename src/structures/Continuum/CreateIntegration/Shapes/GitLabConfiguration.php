<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceUrl
 * @property 'GROUP'|'PROJECT' $targetType
 * @property string $targetPath
 * @property string $accessToken
 */
class GitLabConfiguration extends Shape
{
    /**
     * @param array{
     *     instanceUrl: string,
     *     targetType: 'GROUP'|'PROJECT',
     *     targetPath: string,
     *     accessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
