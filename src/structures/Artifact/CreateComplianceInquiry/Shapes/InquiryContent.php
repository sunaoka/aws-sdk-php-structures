<?php

namespace Sunaoka\Aws\Structures\Artifact\CreateComplianceInquiry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $query
 * @property InquiryFileContent|null $fileContent
 */
class InquiryContent extends Shape
{
    /**
     * @param array{
     *     query?: string|null,
     *     fileContent?: InquiryFileContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
