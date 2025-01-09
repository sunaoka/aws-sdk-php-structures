<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetDirectoryLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $CloudOnlyDirectoriesLimit
 * @property int<0, max> $CloudOnlyDirectoriesCurrentCount
 * @property bool $CloudOnlyDirectoriesLimitReached
 * @property int<0, max> $CloudOnlyMicrosoftADLimit
 * @property int<0, max> $CloudOnlyMicrosoftADCurrentCount
 * @property bool $CloudOnlyMicrosoftADLimitReached
 * @property int<0, max> $ConnectedDirectoriesLimit
 * @property int<0, max> $ConnectedDirectoriesCurrentCount
 * @property bool $ConnectedDirectoriesLimitReached
 */
class DirectoryLimits extends Shape
{
    /**
     * @param array{
     *     CloudOnlyDirectoriesLimit?: int<0, max>,
     *     CloudOnlyDirectoriesCurrentCount?: int<0, max>,
     *     CloudOnlyDirectoriesLimitReached?: bool,
     *     CloudOnlyMicrosoftADLimit?: int<0, max>,
     *     CloudOnlyMicrosoftADCurrentCount?: int<0, max>,
     *     CloudOnlyMicrosoftADLimitReached?: bool,
     *     ConnectedDirectoriesLimit?: int<0, max>,
     *     ConnectedDirectoriesCurrentCount?: int<0, max>,
     *     ConnectedDirectoriesLimitReached?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
