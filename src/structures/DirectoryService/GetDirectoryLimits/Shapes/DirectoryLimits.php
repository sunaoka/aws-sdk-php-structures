<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetDirectoryLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CloudOnlyDirectoriesLimit
 * @property int $CloudOnlyDirectoriesCurrentCount
 * @property bool $CloudOnlyDirectoriesLimitReached
 * @property int $CloudOnlyMicrosoftADLimit
 * @property int $CloudOnlyMicrosoftADCurrentCount
 * @property bool $CloudOnlyMicrosoftADLimitReached
 * @property int $ConnectedDirectoriesLimit
 * @property int $ConnectedDirectoriesCurrentCount
 * @property bool $ConnectedDirectoriesLimitReached
 */
class DirectoryLimits extends Shape
{
    /**
     * @param array{
     *     CloudOnlyDirectoriesLimit?: int,
     *     CloudOnlyDirectoriesCurrentCount?: int,
     *     CloudOnlyDirectoriesLimitReached?: bool,
     *     CloudOnlyMicrosoftADLimit?: int,
     *     CloudOnlyMicrosoftADCurrentCount?: int,
     *     CloudOnlyMicrosoftADLimitReached?: bool,
     *     ConnectedDirectoriesLimit?: int,
     *     ConnectedDirectoriesCurrentCount?: int,
     *     ConnectedDirectoriesLimitReached?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
