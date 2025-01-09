<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegistryId
 * @property string $RepositoryName
 * @property string $Architecture
 * @property string $ImageDigest
 * @property list<string> $ImageTags
 * @property string $ImagePublishedAt
 */
class AwsEcrContainerImageDetails extends Shape
{
    /**
     * @param array{
     *     RegistryId?: string,
     *     RepositoryName?: string,
     *     Architecture?: string,
     *     ImageDigest?: string,
     *     ImageTags?: list<string>,
     *     ImagePublishedAt?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
