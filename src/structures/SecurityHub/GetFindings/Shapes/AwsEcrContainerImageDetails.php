<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegistryId
 * @property string|null $RepositoryName
 * @property string|null $Architecture
 * @property string|null $ImageDigest
 * @property list<string>|null $ImageTags
 * @property string|null $ImagePublishedAt
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     RegistryId?: string|null,
     *     RepositoryName?: string|null,
     *     Architecture?: string|null,
     *     ImageDigest?: string|null,
     *     ImageTags?: list<string>|null,
     *     ImagePublishedAt?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
