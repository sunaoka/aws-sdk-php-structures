<?php

namespace Sunaoka\Aws\Structures\Artifact\CreateComplianceInquiry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $fileSections
 * @property string|resource|\Psr\Http\Message\StreamInterface $content
 */
class InquiryFileContent extends Shape
{
    /**
     * @param array{
     *     fileSections?: list<string>|null,
     *     content: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
