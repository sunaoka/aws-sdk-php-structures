<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponentVersionArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $artifactName
 */
class GetComponentVersionArtifactRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     artifactName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
