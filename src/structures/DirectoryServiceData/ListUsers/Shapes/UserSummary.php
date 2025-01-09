<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $GivenName
 * @property string $SAMAccountName
 * @property string $SID
 * @property string $Surname
 */
class UserSummary extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     GivenName?: string,
     *     SAMAccountName: string,
     *     SID: string,
     *     Surname?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
