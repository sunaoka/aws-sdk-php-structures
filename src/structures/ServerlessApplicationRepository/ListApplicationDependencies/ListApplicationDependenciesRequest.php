<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int $MaxItems
 * @property string $NextToken
 * @property string $SemanticVersion
 */
class ListApplicationDependenciesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxItems?: int,
     *     NextToken?: string,
     *     SemanticVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
