<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $GivenName
 * @property string $SAMAccountName
 * @property string $SID
 * @property string|null $Surname
 */
class UserSummary extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     GivenName?: string|null,
     *     SAMAccountName: string,
     *     SID: string,
     *     Surname?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
