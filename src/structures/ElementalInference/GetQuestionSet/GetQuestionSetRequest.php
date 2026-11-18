<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetQuestionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $questionSetVersion
 */
class GetQuestionSetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     questionSetVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
