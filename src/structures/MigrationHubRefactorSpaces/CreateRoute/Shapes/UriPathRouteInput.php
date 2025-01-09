<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE' $ActivationState
 * @property bool $AppendSourcePath
 * @property bool $IncludeChildPaths
 * @property list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'> $Methods
 * @property string $SourcePath
 */
class UriPathRouteInput extends Shape
{
    /**
     * @param array{
     *     ActivationState: 'ACTIVE'|'INACTIVE',
     *     AppendSourcePath?: bool,
     *     IncludeChildPaths?: bool,
     *     Methods?: list<'DELETE'|'GET'|'HEAD'|'OPTIONS'|'PATCH'|'POST'|'PUT'>,
     *     SourcePath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
