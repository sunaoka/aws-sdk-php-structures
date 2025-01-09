<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $SemanticVersion
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
