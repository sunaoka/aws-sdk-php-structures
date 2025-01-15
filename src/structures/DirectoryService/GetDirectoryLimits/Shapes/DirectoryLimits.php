<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetDirectoryLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $CloudOnlyDirectoriesLimit
 * @property int<0, max>|null $CloudOnlyDirectoriesCurrentCount
 * @property bool|null $CloudOnlyDirectoriesLimitReached
 * @property int<0, max>|null $CloudOnlyMicrosoftADLimit
 * @property int<0, max>|null $CloudOnlyMicrosoftADCurrentCount
 * @property bool|null $CloudOnlyMicrosoftADLimitReached
 * @property int<0, max>|null $ConnectedDirectoriesLimit
 * @property int<0, max>|null $ConnectedDirectoriesCurrentCount
 * @property bool|null $ConnectedDirectoriesLimitReached
 */
class DirectoryLimits extends Shape
{
    /**
     * @param array{
     *     CloudOnlyDirectoriesLimit?: int<0, max>|null,
     *     CloudOnlyDirectoriesCurrentCount?: int<0, max>|null,
     *     CloudOnlyDirectoriesLimitReached?: bool|null,
     *     CloudOnlyMicrosoftADLimit?: int<0, max>|null,
     *     CloudOnlyMicrosoftADCurrentCount?: int<0, max>|null,
     *     CloudOnlyMicrosoftADLimitReached?: bool|null,
     *     ConnectedDirectoriesLimit?: int<0, max>|null,
     *     ConnectedDirectoriesCurrentCount?: int<0, max>|null,
     *     ConnectedDirectoriesLimitReached?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
