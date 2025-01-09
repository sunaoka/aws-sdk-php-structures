<?php

namespace Sunaoka\Aws\Structures\Amplify\GetArtifactUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $artifactId
 */
class GetArtifactUrlRequest extends Request
{
    /**
     * @param array{artifactId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
