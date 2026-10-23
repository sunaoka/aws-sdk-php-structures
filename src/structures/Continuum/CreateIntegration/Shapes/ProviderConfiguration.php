<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubConfiguration|null $github
 * @property GitLabConfiguration|null $gitlab
 * @property S3Configuration|null $s3
 */
class ProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     github?: GitHubConfiguration|null,
     *     gitlab?: GitLabConfiguration|null,
     *     s3?: S3Configuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
