<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $SemanticVersion
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     SemanticVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
