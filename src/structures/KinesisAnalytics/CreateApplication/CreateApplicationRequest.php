<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $ApplicationDescription
 * @property list<Shapes\Input>|null $Inputs
 * @property list<Shapes\Output>|null $Outputs
 * @property list<Shapes\CloudWatchLoggingOption>|null $CloudWatchLoggingOptions
 * @property string|null $ApplicationCode
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationDescription?: string|null,
     *     Inputs?: list<Shapes\Input>|null,
     *     Outputs?: list<Shapes\Output>|null,
     *     CloudWatchLoggingOptions?: list<Shapes\CloudWatchLoggingOption>|null,
     *     ApplicationCode?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
