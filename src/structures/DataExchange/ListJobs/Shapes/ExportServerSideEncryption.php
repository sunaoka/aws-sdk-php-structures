<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 * @property 'aws:kms'|'AES256' $Type
 */
class ExportServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     KmsKeyArn?: string,
     *     Type: 'aws:kms'|'AES256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
