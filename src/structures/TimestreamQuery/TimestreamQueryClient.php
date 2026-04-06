<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery;

class TimestreamQueryClient extends \Aws\TimestreamQuery\TimestreamQueryClient
{
    use CancelQuery\CancelQueryTrait;
    use CreateScheduledQuery\CreateScheduledQueryTrait;
    use DeleteScheduledQuery\DeleteScheduledQueryTrait;
    use DescribeAccountSettings\DescribeAccountSettingsTrait;
    use DescribeEndpoints\DescribeEndpointsTrait;
    use DescribeScheduledQuery\DescribeScheduledQueryTrait;
    use ExecuteScheduledQuery\ExecuteScheduledQueryTrait;
    use ListScheduledQueries\ListScheduledQueriesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PrepareQuery\PrepareQueryTrait;
    use Query\QueryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAccountSettings\UpdateAccountSettingsTrait;
    use UpdateScheduledQuery\UpdateScheduledQueryTrait;
}
