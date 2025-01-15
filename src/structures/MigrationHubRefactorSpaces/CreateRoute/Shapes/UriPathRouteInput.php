<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $ActivationState
 * @property bool|null $AppendSourcePath
 * @property bool|null $IncludeChildPaths
 * @property list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>|null $Methods
 * @property string $SourcePath
 */
class UriPathRouteInput extends Shape
{
    /**
     * @param array{
     *     ActivationState: 'ACTIVE'|'INACTIVE',
     *     AppendSourcePath?: bool|null,
     *     IncludeChildPaths?: bool|null,
     *     Methods?: list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>|null,
     *     SourcePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
