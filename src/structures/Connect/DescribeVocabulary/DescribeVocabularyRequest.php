<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeVocabulary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $VocabularyId
 */
class DescribeVocabularyRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     VocabularyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
