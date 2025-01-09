<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxChangeset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUT'|'DELETE' $changeType
 * @property string $s3Path
 * @property string $dbPath
 */
class ChangeRequest extends Shape
{
    /**
     * @param array{
     *     changeType: 'PUT'|'DELETE',
     *     s3Path?: string,
     *     dbPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
