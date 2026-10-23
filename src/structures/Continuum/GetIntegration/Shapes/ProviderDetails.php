<?php

namespace Sunaoka\Aws\Structures\Continuum\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubDetails|null $github
 * @property GitLabDetails|null $gitlab
 * @property S3Details|null $s3
 */
class ProviderDetails extends Shape
{
    /**
     * @param array{
     *     github?: GitHubDetails|null,
     *     gitlab?: GitLabDetails|null,
     *     s3?: S3Details|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
