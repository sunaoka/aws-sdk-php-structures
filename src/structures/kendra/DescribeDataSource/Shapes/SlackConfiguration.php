<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TeamId
 * @property string $SecretArn
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property list<'PUBLIC_CHANNEL'|'PRIVATE_CHANNEL'|'GROUP_MESSAGE'|'DIRECT_MESSAGE'> $SlackEntityList
 * @property bool $UseChangeLog
 * @property bool $CrawlBotMessage
 * @property bool $ExcludeArchived
 * @property string $SinceCrawlDate
 * @property int<0, 168> $LookBackPeriod
 * @property list<string> $PrivateChannelFilter
 * @property list<string> $PublicChannelFilter
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class SlackConfiguration extends Shape
{
    /**
     * @param array{
     *     TeamId: string,
     *     SecretArn: string,
     *     VpcConfiguration?: DataSourceVpcConfiguration,
     *     SlackEntityList: list<'PUBLIC_CHANNEL'|'PRIVATE_CHANNEL'|'GROUP_MESSAGE'|'DIRECT_MESSAGE'>,
     *     UseChangeLog?: bool,
     *     CrawlBotMessage?: bool,
     *     ExcludeArchived?: bool,
     *     SinceCrawlDate: string,
     *     LookBackPeriod?: int<0, 168>,
     *     PrivateChannelFilter?: list<string>,
     *     PublicChannelFilter?: list<string>,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
