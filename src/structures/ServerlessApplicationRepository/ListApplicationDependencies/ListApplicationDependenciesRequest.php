<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\ListApplicationDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int<1, 100>|null $MaxItems
 * @property string|null $NextToken
 * @property string|null $SemanticVersion
 */
class ListApplicationDependenciesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxItems?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SemanticVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
