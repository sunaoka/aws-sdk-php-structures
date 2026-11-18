<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSetVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $sha256
 * @property string|null $description
 */
class CreateQuestionSetVersionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     sha256?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
