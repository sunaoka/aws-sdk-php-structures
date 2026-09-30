<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $SftpPort
 * @property 'CLIENT_TALK_FIRST'|'SERVER_TALK_FIRST'|null $CommunicationMode
 */
class SftpPortWithOptions extends Shape
{
    /**
     * @param array{
     *     SftpPort: int<1, 65535>,
     *     CommunicationMode?: 'CLIENT_TALK_FIRST'|'SERVER_TALK_FIRST'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
