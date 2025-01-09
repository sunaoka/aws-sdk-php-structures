<?php

namespace Sunaoka\Aws\Structures\Appstream\DisassociateAppBlockBuilderAppBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppBlockArn
 * @property string $AppBlockBuilderName
 */
class DisassociateAppBlockBuilderAppBlockRequest extends Request
{
    /**
     * @param array{
     *     AppBlockArn: string,
     *     AppBlockBuilderName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
