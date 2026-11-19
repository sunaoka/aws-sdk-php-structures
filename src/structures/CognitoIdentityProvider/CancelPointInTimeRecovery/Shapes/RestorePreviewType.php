<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CancelPointInTimeRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Entity
 * @property int|null $CreateCount
 * @property int|null $UpdateCount
 * @property int|null $DeleteCount
 */
class RestorePreviewType extends Shape
{
    /**
     * @param array{
     *     Entity?: string|null,
     *     CreateCount?: int|null,
     *     UpdateCount?: int|null,
     *     DeleteCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
