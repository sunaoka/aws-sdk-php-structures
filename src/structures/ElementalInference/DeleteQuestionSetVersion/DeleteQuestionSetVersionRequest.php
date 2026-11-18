<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteQuestionSetVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $questionSetVersion
 */
class DeleteQuestionSetVersionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     questionSetVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
